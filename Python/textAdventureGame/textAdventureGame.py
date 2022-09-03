#textAdventureGame.py

name = input("Enter your name: ")
print("Welcome " + name + " to this adventure!")

q1 = input("You find yourself on a dirt road, it has come to an end and you can go left or right. Which way would you like to go (left/right)? ").lower()

if q1 == "left":
    q2 = input("You come to a gorge, you can either try to walk around it or try to cross it with an old bridge (walk/cross)? ").lower()

    if q2 == "cross":
        print("You tried to cross the bridge and it broke under your weight. You lost the game.")
    elif q2 == "walk":
        print("You walked for many miles, ran out of water and energy. You lost the game.")
    else:
        print('Not a valid option. You lost the game.')

elif q1 == "right":
    q3 = input("You come to a really small village. Do you want to knock on the big houses door or keep walking (knock/walk)? ").lower()

    if q3 == "knock":
        print("You knocked on the door and an angry giant trampled you. You lost the game.")
    elif q3 == "walk":
        q4 = input("You keep walking thru the village. Half a mile later you meet a carriage. Do you stop it and ask for a ride (yes/no)? ").lower()
	
        if q4 == "yes":
            print("You talk to the driver and they give you ride back home. You WON the game!")
        elif q4 == "no":
            print("You ignored the carriage and kept on walking until your water and energy ran out. You lost the game.")
        else:
            print('Not a valid option. You lost the game.')
    else:
        print('Not a valid option. You lost the game.')
else:
    print('Not a valid option. You lost the game.')
