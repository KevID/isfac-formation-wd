"""
Exercice 3:
"""

ma_liste = {}
actions = {
    'A': 'Ajout',
    'P': 'Prix',
    'S': 'Supprimer',
    'L': 'Liste',
    'V': 'Vider',
    'E': 'Exit'
}

while 1 == 1:
    text = ''
    for key, value in actions.items():
        text += f"{key} = {value}, "
    print("\n\n(", text, ")")

    action = input("\nQuelle action souhaitez-vous effectuer ? ").upper()

    if action not in actions:
        print('Cette action n\'est pas connue.')
        continue

    if action == 'E':
        break

    if action == 'A':
        ingredient = input('Indiquez l\'ingredient: ')
        if ',' in ingredient:
            liste_ingredients = ingredient.split(',')
            for ingredient in liste_ingredients:
                if ingredient not in ma_liste:
                    ma_liste[ingredient] = ''
                    print(ingredient, ' a été ajouté à la liste.')
        else:
            if ingredient not in ma_liste:
                ma_liste[ingredient] = ''
                print(ingredient, ' a été ajouté à la liste.')

    if action == 'P':
        ingredient = input('Indiquez l\'ingredient: ')
        if ingredient in ma_liste:
            prix = input('Indiquez le prix: ')
            ma_liste[ingredient] = prix
            print('Le prix a été ajouté à ', ingredient)
        else:
            print(ingredient, ' n\'est pas dans la liste.')

    elif action == 'S':
        ingredient = input('Indiquez l\'ingredient: ')
        if ingredient in ma_liste:
            del ma_liste[ingredient]
            print(ingredient, 'a été supprimé de la liste.')
        else:
            print(ingredient, ' n\'était pas dans votre liste.')

    elif action == 'L':
        if len(ma_liste) > 0:
            prix_total = 0
            for ingredient, prix in ma_liste.items():
                print(f"{ingredient}: {prix} €")
                prix_total += int(prix)
            print(f"Le prix total est de {prix_total} €.")
        else:
            print('Il n\'y a aucun ingrédient dans votre liste.')

    elif action == 'V':
        ma_liste.clear()
        print('La liste a été vidée.')
