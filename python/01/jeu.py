from random import randint

nb_a_trouver = randint(1, 10)
bingo = False

# Première tentative
number = int(input('Quel est le chiffre ?'))

if number > nb_a_trouver:
    print('Le nombre est plus petit que', number)
elif number == nb_a_trouver:
    print('BINGOOO !!!! Tu as trouvé le nombre', number)
    bingo = True
else:
    print('Le nombre est plus grand que', number)

if not bingo:
    # Deuxième tentative
    number = int(input('Quel est le chiffre ?'))

    if number > nb_a_trouver:
        print('Le nombre est plus petit que', number)
    elif number == nb_a_trouver:
        print('BINGOOO !!!! Tu as trouvé le nombre', number)
        bingo = True
    else:
        print('Le nombre est plus grand que', number)

if not bingo:
    # Dernière tentative
    number = int(input('Quel est le chiffre ?'))

    if number == nb_a_trouver:
        print('BINGOOO !!!! Tu as trouvé le nombre', number)
    else:
        print('Le nombre était', nb_a_trouver)
