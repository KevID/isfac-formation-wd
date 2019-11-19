from random import randint

essais = int(input('Combien veux-tu d\'essais ?'))

essais_restant = essais

rand_max = int(input('Entre 0 et  ?'))

nb_a_trouver = randint(1, rand_max)

for tour in range(0, essais):

    number = int(input('Quel est le chiffre ?'))

    if number > nb_a_trouver:
        print('Le nombre est plus petit que', number)
    elif number == nb_a_trouver:
        print("\x1b[6;30;42m" + 'BINGOOO !!!! Tu as trouvé le nombre' + "\x1b[0m", number)
        break
    else:
        print('Le nombre est plus grand que', number)

    essais_restant -= 1
    if essais_restant > 1:
        print('Il te reste', essais_restant, 'essais.', "\n")
    else:
        print("Il te reste {essais_restant} essai.\n")
