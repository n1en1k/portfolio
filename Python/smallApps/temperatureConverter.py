# temperature converter
# fahrenheit to celcius or celcius to fahrenheit

# user data
operator = input("Select operator F to C or C to F (ftc / ctf): ")
temp = float(input("Enter temperature: "))


if operator == "ftc":
    celcius = (temp - 32) * 0.5556
    celcius = round(celcius,1)
    print(str(celcius) + " C")
elif operator == "ctf":
    fahrenheit = (temp * 1.8) + 32
    fahrenheit = round(fahrenheit,1)
    print(str(fahrenheit) + " F")
else:
    print("Wrong operator!")
