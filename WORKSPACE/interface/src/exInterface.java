import java.awt.Color;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;
public class exInterface extends JFrame implements ActionListener {

	//declaração de objetos//
	JLabel numero1,numero2,resultado;
	JTextField cxnum1,cxnum2,cxres;
	JButton bt_calcular, bt_limpar;	
	
	
	//super classe//
	//cosntrutor da janela//
	public exInterface(){
		
		//título do formulário//
		setTitle("Soma de Dois Números");
		
		//tamanho do formulário//
		setSize(350,280);
		
		//abrir form centralizado//
		this.setLocationRelativeTo(null);
		
		//clicar no formulario para fechar//
		setDefaultCloseOperation
		(DISPOSE_ON_CLOSE);
		
		/*retirar opção de maximizar formulário*/
		setResizable(false);
		
		//cor de fundo do formulário//
		getContentPane().setBackground(new Color(150,120,50));
		
		numero1 = new JLabel("digite o 1 número:");
		//colocar cor no texto//
		numero1.setForeground(Color.yellow);
		
		//numero1.setfont(new Font("Arial",Font.BOLD,30));
		//fonte -- negrito --tamanho//
		
		numero2 = new JLabel("digite o 2 número: ");
		resultado = new JLabel("Resultado");
		
		cxnum1= new JTextField("");
		cxnum2= new JTextField("");
		cxres= new JTextField("");
		
		bt_calcular = new JButton("calcular");
		bt_calcular = new JButton ("limpar");
		
		
		/*posicionar elementos na tela metodo setbounds em pixels// */	
		/*objetos setbounds(posiçãoColuna(eixo x), posiçãoLinha(eixo y),
		 * comprimento linha, AlturaLinha)
		 */
		
		
		//posições dos textos//
		numero1;setBounds(20,30,150,40);
		
		
		
	}

	@Override
	public void actionPerformed(ActionEvent arg0) {
		
		
	}
	 
}
