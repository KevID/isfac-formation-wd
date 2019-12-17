def ma_fonction():
    print('Hello world !')
    return "Texte retourné par la fonction"


ma_var = ma_fonction()
print(ma_var)


def addition(a, b=5):
    return a + b


dix = 10
print(addition(5, dix))

print(addition(5))


def fiche(nom, prenom, age='', ville=''):
    msg = f"Bonjour {prenom} {nom}"
    if (age):
        msg += f", tu as {age}"
    if (ville):
        msg += f", tu habites à {ville}"
    return msg


print(fiche('DOE', 'John', '', 'Poitiers'))


def calcul(nb1, nb2, operation='add'):
    """Calcule une addition ou une soustraction de deux nombres"""
    resultat = None
    if operation == 'add':
        resultat = nb1 + nb2
    if operation == 'sub':
        resultat = nb1 - nb2
    return resultat


print(calcul(10, 20))
print(calcul(10, 20, 'sub'))

print(calcul(operation='add', nb2=10, nb1=20))

x = "hello"


def test():
    print(x)


def test2():
    x = "Aurevoir"
    print(x)


test()
test2()

help(calcul)
print(calcul.__code__)
