#!/usr/bin/env python3
# coding: utf-8
import cgi
import cgitb

cgitb.enable()

print("Content-type: text/html; charset=utf-8\n")

calcul = 8 + 10

form = cgi.FieldStorage()
name = form.getvalue("name")

html = f"""
    <!DOCTYPE html>
    <head>
        <title>Mon programme</title>
    </head>
    <body>
        <h1>Hello {name}!</h1>
        <p>Mon résultat : {calcul}</p>

        <form action="/01_index.py" method="post">
            <input type="text" name="name" value="" placeholder="Votre nom">
            <input type="submit" value="Envoyer information au serveur">
        </form>
    </body>
    </html>
"""

cgi.test()

print(html)
