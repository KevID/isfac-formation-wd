"""
Un tuple est une liste qui ne peut pas être modifiée
Si une seule valeur il faut obligatoirement  une virgule après, sinon python n'interpète pas comme un tuple
"""
mon_tuple = ()
mon_tuple = (1,)
mon_tuple = (1, 'ok', 'Bonjour')

a, b, c = mon_tuple  # a = 1, b = 'ok', c = 'Bonjour'
