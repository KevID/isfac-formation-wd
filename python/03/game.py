""" 
    1 mot
    nb erreurs acceptées = 7
    nb de tirets correspondant au nb de caractères du mot
    si mot trouvé = gagné
    si nb erreurs atteint = perdu
"""

errors_maxi = 7
errors = 0
lettres = []

while errors < errors_maxi:
    mot = input("Quel mot souhaites-tu trouver ?")
    lettre = input("Quelle lettre?")

    if lettre in lettres:
        print("Tu as déjà proposé cette lettre.")
    lettres += lettre

    if not lettre in mot:
        errors += 1

    if errors == errors_maxi:
        print("Perdu !")
