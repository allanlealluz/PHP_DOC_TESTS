def draw_pyramid(x):
    for i in range(x):
        print(" " * (x - i - 1) + "#" * (2 * i + 1))

# Ask for the number of floors
floors = int(input("Enter the number of floors: "))

# Draw the pyramid
draw_pyramid(floors)