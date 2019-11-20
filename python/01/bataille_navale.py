lignes = int(input('Nombre de lignes du plateau ?'))
colonnes = int(input('Nombre de colonnes du plateau ?'))

print("")  # Saut de ligne

# Affiche la ligne de numérotation des colonnes
texte_ligne = '     '
for col in range(colonnes):
    if 9 < col + 1 < 100:
        texte_ligne += ' ' + str(col + 1) + ''
    else:
        texte_ligne += ' ' + str(col + 1) + ' '
print(texte_ligne)

# Construit toutes les lignes
for ligne in range(lignes):
    if 9 < ligne + 1 < 100:
        texte_ligne = '  ' + str(ligne + 1) + ' '
    else:
        texte_ligne = '   ' + str(ligne + 1) + ' '
    # Construit une ligne
    for col in range(colonnes):
        texte_ligne += ' 0 '
    print(texte_ligne)
