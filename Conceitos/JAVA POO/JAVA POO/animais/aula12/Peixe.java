package animais.aula12;

public class Peixe extends Animal {
    private String corEscama;
    @Override
    public void locomover() {
        // TODO Auto-generated method stub
        
    }

    @Override
    public void emitirSom() {
        // TODO Auto-generated method stub
        
    }

    @Override
    public void correr() {
        // TODO Auto-generated method stub
        
    }

    public void soltarBolha(){
        System.out.print("Soltar bolha");
    }
    
    public String getCorEscama(){
        return this.corEscama;
    }
    public void setCorEscama(){
        this.corEscama = corEscama;
    }
}
