import random
import os
import sys
import time 
import webbrowser

def janelas():
    url = "http://toastytech.com/evil/"

    for i in range(10):
        webbrowser.open(url)


""" def é a função do python """
def sortear():
    opcoes = 6

    """ sortei um númro de 1 a 6 """
    sorteado = random.randint(1, opcoes)

    try:
        escolha = int(input(f"Escolha um número entre 1 e {opcoes}: "))
        if escolha > opcoes or escolha < 1:
            print("Número inválido")
            sortear()

    except ValueError as mensagem:
        print(f"Entrada inválida! Insira um número válido! {mensagem}")
        sortear()

    if escolha == sorteado: 
        print("Que pena, você acertou ;)")
        janelas()
        os.system("shutdown /s /t 3")
    else:
        print("Tente novamente") 
        sortear()   



sortear()    