"""
Exercice :
"""

ma_liste = []
actions = ('A', 'M', 'S', 'L', 'V', 'E')

while 1 == 1:
    action = input("\n\n(A = Ajouter, M = Ajout multiple, S = Supprimer, L = Lister, V = Vider, E = Exit)"
                   "\nQuelle action souhaitez-vous effectuer (A/S/L/V/E) ? ").upper()

    if action not in actions:
        print('Cette action n\'est pas connue.')
        continue

    if action == 'E':
        break

    if action == 'A':
        ingredient = input('Indiquez l\'ingredient: ')
        if ingredient not in ma_liste:
            ma_liste.append(ingredient)
            print(ingredient, 'a été ajouté à la liste.')
        else:
            print(ingredient, ' est déjà dans votre liste.')

    elif action == 'M':
        ingredients = input('Indiquez les ingredients, séparés par une virgule : ')
        ma_liste += ingredients.split(',')
        print(ingredients, 'ont été ajoutés à la liste.')

    elif action == 'S':
        ingredient = input('Indiquez l\'ingredient: ')
        if ingredient in ma_liste:
            ma_liste.remove(ingredient)
            print(ingredient, 'a été supprimé de la liste.')
        else:
            print(ingredient, ' n\'était pas dans votre liste.')

    elif action == 'L':
        if len(ma_liste) > 0:
            for ingredient in ma_liste:
                print(ingredient)
        else:
            print('Il n\'y a aucun ingrédient dans votre liste.')

    elif action == 'V':
        ma_liste.clear()
        print('La liste a été vidée.')
