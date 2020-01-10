from random import randint


def start_game():
    print("Trouver un nombre entre 0 et 10")

    chiffre_a_trouver = randint(0, 10)
    nb_chance = 5

    # debug
    print(chiffre_a_trouver)

    for i in range(nb_chance):
        print("\n======================================================")

        print(f"Il vous reste {nb_chance - i} chance(s) sur {nb_chance}")
        proposition = int(input("Quelle est votre proposition de chiffre ?"))

        if proposition == chiffre_a_trouver:
            print(">>>> Bien joué ! Le chiffre à trouver était ", chiffre_a_trouver)
            break

        elif proposition < chiffre_a_trouver:
            print(">>>> Le chiffre à trouver est supérieur à ", proposition)

        elif proposition > chiffre_a_trouver:
            print(">>>> Le chiffre à trouver est inférieur à ", proposition)

        if nb_chance == i + 1:
            print("Perdu !!")

    print("\nLe chiffre à trouver était ", chiffre_a_trouver)


if __name__ == "__main__":
    start_game()
