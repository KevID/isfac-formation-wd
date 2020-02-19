#!/usr/bin/env python3
# coding: utf-8
import cgi

from jinja2 import Template

template = Template("""
    <!DOCTYPE html>
    <head>
        <title>Mon programme</title>
    </head>
    <body>
        <h1>Hello {{name}}!</h1>
    </body>
    </html>
""")

print("Content-type: text/html; charset=utf-8\n")
print(template.render(name='John'))
