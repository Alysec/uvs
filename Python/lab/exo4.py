# Exo4: Effectuer la permutation de trois variables

def permuter(foo,bar,buz):
    foo,bar,buz=buz,foo,bar
    return foo, bar,buz

def main():
    print("main")
    foo=1
    bar=2
    buz=3
    print (foo,bar,buz)
    foo,bar,buz=permuter(foo,bar,buz)
    print (foo,bar,buz)
main()