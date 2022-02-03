package controleremoto;
public class ControleInterface {
    public interface Controlador {
        public abstract void ligar();
        public abstract void desligar();
        public abstract void abrirMenu();
        public abstract void fecharMenu();
        public abstract void volumeMais();
        public abstract void volumeMenos();
        public abstract void mudoOn();
        public abstract void mudooff();
        public abstract void play();
        public abstract void pause();



    }
}
