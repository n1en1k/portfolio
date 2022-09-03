#simpleCalculator.py

#functions
def add(number1, number2):
    # This function is used for adding two numbers   
    return number1 + number2
    
def subtract(number1, number2):
    # This function is used for subtracting two numbers   
    return number1 - number2

def multiply(number1, number2):
    # This function is used for multiplying two numbers   
    return number1 * number2

def divide(number1, number2):
    # This function is used for dividing two numbers    
    return number1 / number2

def potency(number1, number2):
    # This function is used for dividing two numbers    
    return pow(number1, number2)

#ui
print("Select the operation")
print("a. Add")
print("b. Subtract")
print("c. Multiply")
print("d. Divide")
print("e. Potency")
#get choice from user
choice = input("Enter choice (a / b / c / d / e): ")
#get numbers from user and convert input to decimal numbers
num_1 = float(input ("Enter the first number: "))
num_2 = float(input ("Enter the second number: "))

#check and return selected operation
if choice == "a":
    print(num_1, " + ", num_2, " = ", add(num_1, num_2))
        
elif choice == "b":
    print(num_1, " - ", num_2, " = ", subtract(num_1, num_2))
        
elif choice == "c":
    print(num_1, " * ", num_2, " = ", multiply(num_1, num_2))
elif choice == "d":
    print(num_1, " / ", num_2, " = ", divide(num_1, num_2))
elif choice == "e":
    print(num_1, " ^ ", num_2, " = ", potency(num_1, num_2))
else:
    print("Invalid input")