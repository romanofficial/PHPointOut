```bash
[User] ---> [CoffeeShop]
              |
            (registers)
              |
     -------------------------
     |                       |
[Latte Recipe]          [Espresso Recipe]
   (Callable)               (Callable)
     |                         |
[Latte] ---> Calls ---> [serve()]  --> Output: "Serving a Latte!"
     |
[Espresso] ---> Calls ---> [serve()]  --> Output: "Serving an Espresso!"

```