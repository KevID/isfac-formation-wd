"""
Un dictionnaire est un liste avec des clés alphanumériques à la place des index.
"""

mon_dico = {}
mon_dico = dict()

mon_dico['mot'] = 'France'
mon_dico['definition'] = 'Pays européen'
mon_dico['1'] = 33

mon_dico['mot']  # Retourne France
mon_dico.get('mot')  # Retourne France

# mon_dico['bug1']  # Retourne France (renvoie un erreur si bug1 n'existe pas
mon_dico.get('bug2')  # Retourne France
mon_dico.get('adresse', 'Aucune adresse')  # Affecte une valeur par défaut si valeur de la clef 'adresse' n'existe pas

'adresse' in mon_dico  # Vérifie si la clef existe dans le dictionnaire

del mon_dico['definition']  # Supprime une occurrence

# mon_dico.clear()  # Vide tout le dictionnaire

for clef in mon_dico.keys():
    print(clef)

for valeur in mon_dico.values():
    print(valeur)

for clef, valeur in mon_dico.items():
    print(clef, ' = ', valeur)

dico1 = {'mot': 'France'}
dico2 = {'definition': 'Pays européen'}
dico1.update(dico2)
