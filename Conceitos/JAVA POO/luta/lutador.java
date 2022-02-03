package luta;

public class lutador {
    private String nome;
    private int age;
    private float peso;
    private String categoria;
    public String vercategoria(){
        return this.getCategoria();
    }
    public void setCategoria(float x){
        this.peso = x;
        if (x < 50 ) {
            this.categoria = "pena";
            } else if(x > 50) {
                this.categoria ="pesado";
            }
                
    }
    public String getCategoria(){
        return this.categoria;
    }
    public lutador(){
        this.age = 20;
    }
    public String getName(){
        return this.nome;
    }
    


    
}
