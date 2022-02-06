package animais.aula12;

public class Mamifero extends Animal{
    private String corPelo;
    @Override
    public void locomover() {
        // TODO Auto-generated method stub
        System.out.println("oi");
        
    }

    @Override
    public void emitirSom() {
        // TODO Auto-generated method stub
        
    }

    @Override
    public void correr() {
        // TODO Auto-generated method stub
        
    }
    public String getCorPelo(){
        return this.corPelo;
    }
    public void setCorPelo(String corPelo){
        this.corPelo = corPelo;
    }

  
    
    
}
