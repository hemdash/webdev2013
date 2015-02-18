import random
# Choosing how many of each color there will be
yellow = random.randrange(10,15)
blue = random.randrange(1,10)
white = random.randrange(6,15)
green = random.randrange(10,25)
black = random.randrange(1,12)
purple = random.randrange(5,10)
silver = random.randrange(4,6)
cyan = random.randrange(5,12)
magenta = random.randrange(0,10)
red = 1
# Actually producing the proper amount of each color
a = [1,yellow]
A = [a[0]] * a[1]
b = [2,blue]
B = [b[0]] * b[1]
c = [3,white]
C = [c[0]] * c[1]
d = [4,green]
D = [d[0]] * d[1]
e = [5,black]
E = [e[0]] * e[1]
f = [6,purple]
F = [f[0]] * f[1]
g = [7,silver]
G = [g[0]] * g[1]
h = [8,cyan]
H = [h[0]] * h[1]
i = [9,magenta]
I = [i[0]] * i[1]
j = [10,red]
J = [j[0]] * j[1]
# Combining all of these gum balls into one list
total = A + B + C + D + E + F + G + H + I + J
# Randomly choosing each gum ball one at a time until red (or 10) is chosen:
random.shuffle(total)
random_selection = total[ :total.index(10) + 1 ]
# Assigning the numbers with actual colors
d = {1: 'yellow', 2: 'blue', 3: 'white', 4: 'green', 5: 'black', 6: 'purple', 7: 'silver', 8: 'cyan', 9: 'magenta', 10: 'red'}
# When a number is chosen, it will transform into its coordinating color
random_selection = [d[k] for k in random_selection]
for arandom_selection in random_selection:
	print(arandom_selection)

# Figuring out the colors that occurred the most often
from itertools import groupby
from collections import Counter
freqs = groupby (Counter(random_selection).most_common(), lambda x:x[1])


print'''Welcome to Hayley Munguia's Gum Ball Machine Simulation
You are starting with the following gum balls:
Yellow: ''' + str(len(A))
print"Blue: " + str(len(B))
print"White: " + str(len(C))
print"Green: " + str(len(D))
print"Black: " + str(len(E))
print"Purple: " + str(len(F))
print"Silver: " + str(len(G))
print"Cyan: " + str(len(H))
print"Magenta: " + str(len(I))
print" and Red: " + str(len(J))
print"Here are your random purchases:"
for arandom_selection in random_selection:
	print(arandom_selection)

print"Number of gum balls purchased: " + str(len(random_selection))
print"For a total of: $" + str(len(random_selection)*.25)
print"The color(s) purchased most often: " + str([val for val, count in freqs.next()[1]])
}