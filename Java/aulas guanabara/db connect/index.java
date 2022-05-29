import java.io.PrintStream;
import java.sql.Connection;
import javax.swing.JOptionPane;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;



public class index{
    public static void main(String[] args) throws ClassNotFoundException{
        try{
            Class.forName("com.mysql.cj.jbdc.Driver");
            Connection conexao = DriverManager.getConnection(
                "jdbc:mysql://localhost:3306/banco_de_dados","lucas","lucas");
            Statement stmt = conexao.createStatement();
            ResultSet rs=stmt.executeQuery("show databases;");
            System.out.print("Conectado");
        }
        catch(SQLException eita ){
            JOptionPane.showMessageDialog(null, "ConexaoDAO" + eita.getMessage());
        }
    }

}
