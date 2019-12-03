albums = [
    {
        'artiste': 'Nirvana',
        'album_title': 'Nevermind',
        'annee': '1991'
    },
    {
        'artiste': 'Nirvana',
        'album_title': 'Unplugged in New York',
        'annee': '1994'
    },
    {
        'artiste': 'Nirvana',
        'album_title': 'In Utero',
        'annee': '1993'
    },
    {
        'artiste': 'The beatles',
        'album_title': 'Sgt. Pepper\'s',
        'annee': '1968'
    },
    {
        'artiste': 'The beatles',
        'album_title': 'Abbey Road',
        'annee': '1967'
    }
]

artiste = ''
for album in albums:
    if artiste != album['artiste']:
        artiste = album['artiste']
        print("\n\n", artiste)

    print(" - album de", album['annee'], ": ", album['album_title'])
