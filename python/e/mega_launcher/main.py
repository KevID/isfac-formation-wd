from e.mega_launcher.shopping_list.shopping_list import start_list
from e.mega_launcher.find_number.find_number import start_game
from e.mega_launcher.hanged.main import hanged

import e.mega_launcher.find_number

choice = input("Que voulez vous faire ?\n"
               "1 = Course / 2 = Jeu du nombre / 3 = Read file / 4 = Write in file / 5 = ""Hanged")

if choice == "1":
    start_list()

if choice == "2":
    print("Version: ", e.mega_launcher.find_number.__version__)
    start_game()

if choice == "3":
    fichier = open("data.txt", "r")
    """print(fichier.read())"""
    i = 1
    for line in fichier:
        print(i, '. ', line)
        i += 1
    fichier.close()

if choice == "4":
    with open("data.txt", "w") as file:
        file.write("Hello world\nComment ça va ?\n")

if choice == "5":
    hanged()
