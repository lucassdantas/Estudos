package luta;

public class luta {
    private lutador desafiado;
    private lutador desafiante;
    private int rounds;
    private boolean aprovada;
    public void Luta() {
        this.setLuta();
    }
    
    public void setLuta(lutador lutador01, lutador lutador02){
        this.desafiado = lutador01.getName();
        this.desafiante = lutador02.getName();
        
    }
    
}
