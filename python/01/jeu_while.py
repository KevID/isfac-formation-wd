from random import randint

nb_a_trouver = randint(1, 10)
bingo = False

while bingo == True:

    number = int(input('Quel est le chiffre ?'))

    if number > nb_a_trouver:
        print('Le nombre est plus petit que', number)
    elif number == nb_a_trouver:
        print('BINGOOO !!!! Tu as trouvé le nombre', number)
        bingo = True
    else:
        print('Le nombre est plus grand que', number)
