class Personne: 
    def initialiser(self, nom,prenom,age):
        self.nom=nom
        self.prenom=prenom
        self.age=age

    def get_name(self):
        return self.nom

    def set_age(self,new_age):
        self.age=new_age
pers= Personne()
pers.initialiser("SECK","Aly",30)
pers.set_age(15)
vars(pers)