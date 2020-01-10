"""
    1 mot
    nb erreurs acceptées = 7
    nb de tirets correspondant au nb de caractères du mot
    si mot trouvé = gagné
    si nb erreurs atteint = perdu
"""


def check_lettre(lettre, mot):
    error = 0
    if lettre in mot:
        print(f"Bravo, la lettre {lettre} est dans le mot.")
    else:
        error = 1
        print(f"Désolé, pas de lettre {lettre}.")

    return error


def affiche_lettre(lettres, lettre_proposee, mot):
    mot_affiche = ""
    for lettre in mot:
        if lettre == lettre_proposee:
            mot_affiche += lettre + ' '
        else:
            for lettre2 in lettres:
                if lettre2 == lettre:
                    mot_affiche += lettre + ' '
                else:
                    mot_affiche += '_ '
                    
    return mot_affiche


def hanged():
    errors_maxi = 7
    errors = 0
    lettres = []
    mot = input("Quel mot souhaites-tu trouver ?")
    mot_affiche = "_"

    while "_" in mot_affiche and errors < errors_maxi:
        lettre = input("Quelle lettre?")

        if lettre in lettres:
            print("Tu as déjà proposé cette lettre.")
            lettres += lettre
            continue

        errors += check_lettre(lettre, mot)

        mot_affiche = affiche_lettre(lettres, lettre, mot)

        print(mot_affiche)

        if errors == errors_maxi:
            print("Perdu !")


if __name__ == "__main__":
    hanged()
