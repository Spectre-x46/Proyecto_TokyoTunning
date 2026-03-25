import csv, collections, os

CSV = r'BD_Worpress/wc-product-export-18-3-2026-1773814320550.csv'
WP_UPLOADS = r'tokyotunning-local/app/public/wp-content/uploads'

with open(CSV, encoding='utf-8-sig') as f:
    reader = csv.DictReader(f)
    rows = list(reader)

cols = list(rows[0].keys())
print('COLUMNAS:')
for i,c in enumerate(cols):
    print(f'{i:2}. {c}')
print()
print('TOTAL:', len(rows))
tipos = collections.Counter(r.get('Tipo','') for r in rows)
print('TIPOS:', dict(tipos))

col_precio = next((c for c in cols if 'Precio normal' in c), None)
col_rebajado = next((c for c in cols if 'rebajado' in c.lower()), None)
col_img = next((c for c in cols if 'magen' in c), None)
col_cat = next((c for c in cols if 'ategor' in c), None)
col_slug = next((c for c in cols if 'lug' in c.lower()), None)
col_dcs = next((c for c in cols if 'corta' in c.lower()), None)

print('precio col:', col_precio)
print('rebajado col:', col_rebajado)
print('imagen col:', col_img)
print('categ col:', col_cat)
print('slug col:', col_slug)
print('desc corta col:', col_dcs)

con_p = sum(1 for r in rows if r.get(col_precio,'').strip())
con_r = sum(1 for r in rows if r.get(col_rebajado,'').strip())
con_i = sum(1 for r in rows if col_img and r.get(col_img,'').strip())
print(f'Con precio normal: {con_p}, con precio rebajado: {con_r}, con imagen: {con_i}')

cats = collections.Counter()
for r in rows:
    if r.get('Tipo') in ('simple','variable'):
        for p in r.get(col_cat,'').split(','):
            l = p.split('>')[-1].strip()
            if l:
                cats[l] += 1
print('\nTOP CATEGORIAS (simples+variables):')
for k,v in cats.most_common(30):
    print(f'  {v:4}  {k}')

print('\nEJEMPLOS CON IMAGEN Y PRECIO:')
shown=0
for r in rows:
    cond = (r.get('Tipo')=='simple' and 
            col_precio and r.get(col_precio,'').strip() and 
            col_img and r.get(col_img,'').strip())
    if cond:
        print('Nombre:', r['Nombre'])
        if col_slug:
            print('Slug:', r.get(col_slug,''))
        print('Precio normal:', r.get(col_precio,''))
        print('Precio rebajado:', r.get(col_rebajado,''))
        img = r.get(col_img,'').split(',')[0].strip()
        print('Img1:', img[:120])
        imgs_count = len([x for x in r.get(col_img,'').split(',') if x.strip()])
        print('Num imagenes:', imgs_count)
        print('Cat:', r.get(col_cat,'')[:100])
        if col_dcs:
            print('Desc corta:', r.get(col_dcs,'')[:150])
        print()
        shown+=1
        if shown>=5:
            break

print('UPLOADS WP:')
if os.path.exists(WP_UPLOADS):
    total_files = 0
    for y in sorted(os.listdir(WP_UPLOADS)):
        yp = os.path.join(WP_UPLOADS, y)
        if os.path.isdir(yp):
            cnt = 0
            for m in os.listdir(yp):
                mp = os.path.join(yp, m)
                if os.path.isdir(mp):
                    files = os.listdir(mp)
                    imgs = [x for x in files if x.endswith(('.jpg','.jpeg','.png','.webp'))]
                    cnt += len(imgs)
            total_files += cnt
            print(f'  {y}: ~{cnt} imagenes')
    print(f'  TOTAL IMAGENES: {total_files}')
else:
    print('  NO ENCONTRADO')
