#!/usr/bin/env python3
# coding: utf-8
import cgi

print("Content-type: text/html; charset=utf-8\n")

calcul = 8 + 10

resultat = ""
nb1 = ""
nb2 = ""

form = cgi.FieldStorage()
if form.getvalue("nb1") and form.getvalue("nb2"):
    nb1 = int(form.getvalue("nb1"))
    nb2 = int(form.getvalue("nb2"))
    operator = form.getvalue("operator")

    if operator == "+":
        resultat = nb1 + nb2
    elif operator == "-":
        resultat = nb1 - nb2
    elif operator == "/":
        resultat = nb1 / nb2
    elif operator == "*":
        resultat = nb1 * nb2
    elif operator == "**":
        resultat = nb1 * nb2

html = f"""
    <!DOCTYPE html>
    <head>
        <title>Mon programme de calculatrice</title>
    </head>
    <body>
        <h1>Calculatrice</h1>

        <form action="/calculatrice.py" method="post">
            <input type="text" name="nb1" value="{nb1}" placeholder="Nombre 1">
            <select name="operator" >
                <option value="+" default>+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
                <option value="**">Exp</option>
            </select>
            <input type="text" name="nb2" value="{nb2}" placeholder="Nombre 2">
            <input type="submit" value="Calculer">
        </form>

        <p>Mon résultat : {resultat}</p>
    </body>
    </html>
"""

print(html)
