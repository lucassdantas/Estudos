package animais.aula12;

import javax.sound.sampled.SourceDataLine;

public class Reptil extends Animal {
    private String corEscama;

    @Override
    public void locomover() {
        // TODO Auto-generated method stub
        System.out.print("Rastejar");
    }

    @Override
    public void emitirSom() {
        // TODO Auto-generated method stub
        System.out.print("nenhum");
    }

    @Override
    public void correr() {
        // TODO Auto-generated method stub
        System.out.print("corre nao fi");
    }
    public String getCorEscama(){
        return this.corEscama;
    }
    public void setCorEscama(String corEscama){
        this.corEscama = corEscama;
    }
    
}
