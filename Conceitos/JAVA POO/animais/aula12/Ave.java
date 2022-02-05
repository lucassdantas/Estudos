package animais.aula12;

public class Ave extends Animal{
    private String corPena;

    @Override
    public void locomover(){

    }

    @Override
    public void emitirSom(){

    }
    @Override
    public void correr(){

    }
    public String getCorPena(){
        return this.corPena;
    }
    public void setCorPena (String corPena){
        this.corPena = corPena;
    }
}
