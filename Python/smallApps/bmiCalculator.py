# BMI Calculator

# welcome message
print("Calculate your BMI")

# get user data
user_height = float(input("Type your height in meters (e.g. 1.8): "))
user_weight = float(input("Type your weight in kilograms (e.g. 80): "))

# calculate bmi
user_bmi = user_weight / (user_height * user_height)

# round to one decimal
user_bmi = round(user_bmi,1)

# check bmi category
if user_bmi < 18.5:
    bmi_cat = "underweight"
elif user_bmi >= 18.5 and user_bmi <= 24.9:
    bmi_cat = "normal weight"
elif user_bmi >=25.0  and user_bmi <= 29.9:
    bmi_cat = "overweight"
else:
    bmi_cat = "obese"

# bmi + bmi category
print("Your BMI is: " + str(user_bmi) + " - You are " + bmi_cat)