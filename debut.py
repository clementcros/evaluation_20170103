chaine = ["##",
          "#",
          "-"]
fichier = open("question.qs", "r")
for ligne in fichier:
    for chaine in chaine:
        if chaine in ligne:
fichier.close()
