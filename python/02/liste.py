ma_variable = [1, 2, 3]
ma_variable.append('ok')

ma_var2 = ['hello', 'kitty']

ma_variable.insert(0, ma_var2)

print(ma_variable)

ma_liste = ['spaghettis', 'lardons', 'crème fraiche', 'oeufs', 'parmesan']

print(ma_liste[1], ma_liste[3])

ma_liste.append('clémentines')  # Ajouter un élément à la fin de la liste
ma_liste.insert(2, 'sel')  # Ajouter un élément à un index  de la liste

print(ma_liste)

ma_liste[2] = 'poivre'  # Modifier la valeur d'un élément

for ingredient in ma_liste:
    print(ingredient)

del ma_liste[2]  # Supprimer un élément en précisant son index

print(ma_liste)

for index in [1, 3]:
    del ma_liste[index]

ma_liste.remove('clémentines')

print(ma_liste)

ma_liste.append('miel')
elementDel = ma_liste.pop()  # Supprime par défaut le dernier élément de la liste et place sa valeur dans une variable

ma_liste.pop(0)  # Supprime un élément en précisant son index

print(elementDel)

ma_liste.clear()  # Vider la liste

ma_liste = [1, 10, 50, 100, 200, 500]

print(ma_liste[1:3])  # Retourne les valeurs de l'index 1 (inclus) à 3 (exclu)

if 50 in ma_liste:  # Vérifie que l'élément 50 est dans la liste
    print('50 est dans la liste')

var = 230 in ma_liste  # Var == False

ma_liste = ['spaghettis', 'lardons', 'crème fraiche', 'oeufs', 'parmesan', 'oeufs']

ma_liste.index('oeufs')  # Retourne l'index en précisant sa valeur (ici 3), retourne la première valeur trouvée

ma_liste.index('oeufs', 4)  # Force la position de départ de la recherche, ici retourne 5

print(len(ma_liste))  # Retourne le nombre d'éléments dans la liste, ici 6

ma_liste.reverse()  # Inverse les éléments dans la liste
print(ma_liste)  # Retourne ['oeufs', 'parmesan', 'oeufs', 'crème fraiche', 'lardons', 'spaghettis']

ma_liste_2 = ma_liste  # ATTENTION! ma_liste_2 ne fait qu'une référence à ma_liste

print(ma_liste_2)

ma_liste_2.append('sel')

print(ma_liste)

ma_liste_2 = ma_liste.copy()  # Pour copier une liste et ne pas simplement faire une référence

x = [1, 2, 3]
y = [4, 5, 6]
z = x + y
print(z)  # Retourne [1, 2, 3, 4, 5, 6]

x += y  # identique à    x.extend(y)

print(x)  # Retourne [1, 2, 3, 4, 5, 6]

ma_liste = [1, 2] * 3
print(ma_liste)  # Retourne [1, 2, 1, 2, 1, 2]

range(5)  # Retourne [0, 1, 2 ,3, 4]

var = range(2, 5)  # Retourne [2, 3 ,4]
for nb in range(2, 5):
    print(nb)

ma_chaine = "Banane;Kiwi;Pomme"
ma_liste = ma_chaine.split(';')
print(ma_liste)  # Retourne ['Banane', ' Kiwi', 'Pomme']

ma_chaine = ' - '.join(ma_liste)
print(ma_chaine)  # Retourne     Banane - Kiwi - Pomme
