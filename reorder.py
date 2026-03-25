import sys

def process_file():
    with open('servicios.php', 'r', encoding='utf-8') as f:
        lines = f.readlines()
    
    # Extract blocks based on line ranges
    head_nav = lines[0:97]
    mecanica = lines[97:160]
    electronica = lines[160:216]
    aceite = lines[216:336]
    diagnostico = lines[336:452]
    footer = lines[452:]
    
    # Update the nav sticky order in head_nav
    nav_lines = []
    for line in head_nav:
        nav_lines.append(line)
        
    for i, line in enumerate(nav_lines):
        if '<ul class=\"flex justify-center' in line:
            nav_lines[i+1] = '            <li><a href=\"#diagnostico\" class=\"block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth\">🔍 Diagnóstico</a></li>\n'
            nav_lines[i+2] = '            <li><a href=\"#aceite\" class=\"block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth\">🔧 Aceite</a></li>\n'
            nav_lines[i+3] = '            <li><a href=\"#mecanica\" class=\"block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth\">⚙️ Mecánica</a></li>\n'
            nav_lines[i+4] = '            <li><a href=\"#electronica\" class=\"block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth\">⚡ Electrónica</a></li>\n'
            
    # Also update section comments (optional but cleaner)
    # The new order: head_nav, diagnostico, aceite, mecanica, electronica, footer
    new_content = nav_lines + diagnostico + aceite + mecanica + electronica + footer
    
    with open('servicios.php', 'w', encoding='utf-8') as f:
        f.writelines(new_content)

process_file()
