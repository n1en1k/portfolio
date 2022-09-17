# convert cm to feet and inches US
import math

print("Type your height: ")
user_height_cm = int(input("Centimeters: "))

foot = 30.48

# convert cm to feet
user_height_feet = user_height_cm // foot

# convert to inches
rem = user_height_cm / foot
result = math.modf(rem)
dec, integer = result
user_height_inches = dec * 12

# round to whole number
user_height_feet = round(user_height_feet)
user_height_inches = round(user_height_inches)

# output
print("Your height is: " + str(user_height_feet) + " feet " + str(user_height_inches) + " inches")