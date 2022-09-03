#diceRoll.py
import random
def dicePrint(roll):
    if roll == 1:
        print(" _______ ")
        print("|       |")
        print("|   *   |")
        print("|       |")
        print(" ------- ")
        
    elif roll == 2:
        print(" _______ ")
        print("|  *    |")
        print("|       |")
        print("|    *  |")
        print(" ------- ")
        
    elif roll == 3:
        print(" _______ ")
        print("|  *    |")
        print("|   *   |")
        print("|    *  |")
        print(" ------- ")
        
    elif roll == 4:
        print(" _______ ")
        print("|  * *  |")
        print("|       |")
        print("|  * *  |")
        print(" ------- ")
        
    elif roll == 5:
        print(" _______ ")
        print("|  * *  |")
        print("|   *   |")
        print("|  * *  |")
        print(" ------- ")
        
    elif roll == 6:
        print(" _______ ")
        print("|  * *  |")
        print("|  * *  |")
        print("|  * *  |")
        print(" ------- ")
        
    else: print("Invalid roll")

min = 1
max = 6

another_roll = "yes"

while another_roll == "yes":
    print("The dices are rolling...")
    print("and the values are:")
    dice_one = random.randint(min, max)
    dice_two = random.randint(min, max)
    dicePrint(dice_one)
    dicePrint(dice_two)
    another_roll = input("Roll the dices again (yes/no)? ")

if another_roll == "no":
    print("Roll again soon!")

else: print("Bye!")