package animais.aula12;

public class Aula12 {
   public static void main (String[] args){
    Mamifero m = new Mamifero();
    Reptil r = new Reptil();
    Ave a = new Ave();
    Peixe p = new Peixe();
    Cachorro c = new Cachorro();
    m.setPeso(35.3f);
    System.out.println(m.peso);
    a.setPeso(20.5f);
    System.out.println(a.peso);
    c.setCorPelo("preto");
    c.locomover();
   } 
}
