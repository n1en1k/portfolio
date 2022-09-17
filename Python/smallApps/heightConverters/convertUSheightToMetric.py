# convert feet & inches to cm and meters

print("Type your height: ")
user_height_feet = int(input("Feet: "))
user_height_inches = int(input("Inches: "))

# convert feet to inches and add it to existing inches
user_height_inches += user_height_feet * 12

#convert inches to cm
user_height_cm = user_height_inches * 2.54

#convert cm to m
user_height_m = user_height_cm / 100

# round to 1 decimal
user_height_cm = round(user_height_cm, 2)
user_height_m = round(user_height_m, 2)

# output
print("Your height is: " + str(user_height_cm) + " cm / " + str(user_height_m) + " m")