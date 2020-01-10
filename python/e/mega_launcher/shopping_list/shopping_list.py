def add_items(ma_liste):
    """ """
    key_input = input("Que voulez-vous ajouter ? ")
    if ',' in key_input:
        list_keys = key_input.split(', ')
        for key in list_keys:
            ma_liste[key] = None
    else:
        ma_liste[key_input] = None

    return ma_liste


def delete_item(ma_liste):
    """ """
    key_input = input("Que voulez-vous supprimer ? ")
    if not key_input in ma_liste:
        print("Désolé, ce article n'est pas présent dans la liste")
        return False
    del ma_liste[key_input]

    return ma_liste


def list_items(ma_liste):
    """ """
    nb_item = len(ma_liste)
    total = 0
    print(f"Vous avez {nb_item} article(s) dans vote liste : ")
    for key, value in ma_liste.items():
        print(f"{key} : {value or '-'} €")
        if value:
            total += value
    print(f"\nTotal : {total} €")

    return ma_liste


def clear_list(ma_liste):
    """ """
    ma_liste.clear()
    return ma_liste


def add_price(ma_liste):
    """ """
    article = input("Pour quelle article souhaitez-vous ajouter un prix ?")
    if not article in ma_liste:
        print("cet article n'est pas dans vote liste")
    prix = input("Quel est le prix ?")
    ma_liste[article] = float(prix)
    print(article, ma_liste[article])

    return ma_liste


def get_action(authorized_actions):
    """ """
    msg = "\n\nQuelle action souhaitez-vous effectuer ? \n"
    for key, value in authorized_actions.items():
        msg += f"{key} = {value}, "

    action = input(msg).upper()

    return action


def is_authorized(action, authorized_actions):
    autorized = True
    if not action in authorized_actions:
        print("Nous n'avons pas compris votre demande.")
        autorized = False

    return autorized


def export(ma_liste):
    with open("liste.csv", "w") as file:
        file.write(f"Produit;Prix\n")
        for key, value in ma_liste.items():
            file.write(f"{key};{value}\n")
    print("Export terminé")


def import_liste(ma_liste):
    with open("liste.csv", "r") as file:
        for line in file:
            article, price = line.split(';')
            price = float(price.replace('\n', ''))
            ma_liste[article] = price
            print(f"{article}: {price} €")
    print("Import terminé")


def start_list():
    exit = False
    ma_liste = {}
    authorized_actions = {
        'A': 'Ajouter',
        'S': 'Supprimer',
        'L': 'Liste',
        'V': 'Vider',
        'P': 'Prix',
        'E': 'Exit',
        'X': 'export CSV',
        'I': 'import CSV',
    }

    while not exit:
        action = get_action(authorized_actions)

        if is_authorized(action, authorized_actions):
            print("ok")
            if action == 'E':
                break
            elif action == 'A':
                ma_liste = add_items(ma_liste)
            elif action == 'S':
                if not delete_item(ma_liste):
                    continue
                ma_liste = delete_item(ma_liste)
            elif action == 'L':
                ma_liste = list_items(ma_liste)
            elif action == 'V':
                ma_liste = clear_list(ma_liste)
            elif action == 'P':
                ma_liste = add_price(ma_liste)
            elif action == 'X':
                export(ma_liste)
            elif action == 'I':
                import_liste(ma_liste)

    print("============= Fin du programme ==================")


if __name__ == "__main__":
    start_list()
