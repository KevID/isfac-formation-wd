"""
Exercice :
Créer un script qui permet de demander à un utilisateur de saisir 2 nombres,
puis les actions qu’il souhaite effectuer avec.
- On affiche un message récapitulant l’action à effectuer.
- Tant que l’utilisateur ne demande pas lui même d'arrêter, le programme continue de tourner.
- Les actions sont :
  A = Additionner,
  M = Multiplier,
  S = Soustraire,
  E = Exit
- Selon l’action, afficher le message de l’opération à effectuer et son résultat
(par exemple : “2 + 2 = 4”)
"""

while 1 == 1:
    action = input('Quelle action souhaitez-vous effectuer (A/M/S/E) ? ').upper()

    if action == 'E':
        break

    elif action == 'A' or action == 'M' or action == 'S':

        nb1 = int(input('Donnez un premier nombre: '))
        nb2 = int(input('Donnez un deuxième nombre: '))

        if action == 'A':
            print(nb1, ' + ', nb2, ' = ', nb1 + nb2)

        elif action == 'M':
            print(nb1, ' x ', nb2, ' = ', nb1 * nb2)

        elif action == 'S':
            print(f"{nb1} - {nb2} = {nb1 - nb2}")
