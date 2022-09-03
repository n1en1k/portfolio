#diceRoll.py
import random
min = 1
max = 6

rollAgain = "yes"

while rollAgain == "yes":
    print("The dices are rolling...")
    print("and the values are:")
    print(random.randint(min, max))
    print(random.randint(min, max))

    rollAgain = input("Roll the dices again (yes/no)? ")

if rollAgain == "no":
    print("Roll again soon!")

else: print("Bye!")