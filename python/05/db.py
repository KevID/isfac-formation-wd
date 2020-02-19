#!/usr/bin/env python3
# coding: utf-8
import sqlite3

conn = sqlite3.connect('ma_base.db')
cursor = conn.cursor()

# CREATE ####################################################
cursor.execute("""
CREATE TABLE IF NOT EXISTS users(
     id INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
     name TEXT,
     age INTERGER
)
""")
conn.commit()

# INSERT ####################################################
cursor.execute("INSERT INTO users(name, age) VALUES(?, ?)", ("toto", 30))
conn.commit()
id = cursor.lastrowid

# SELECT ####################################################
cursor.execute("SELECT id, name, age FROM users")
user1 = cursor.fetchone()
rows = cursor.fetchall()

conn.row_factory = sqlite3.Row
c = conn.cursor()
c.execute('SELECT id, name, age FROM users')
rows2 = c.fetchall()
for row in rows2:
    print(row[0], row[1])

# CLOSE ####################################################

conn.close()
