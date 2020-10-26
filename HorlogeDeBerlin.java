import java.time.LocalDateTime;
/**
 * 
 * @author ETIENNE_Lorine
 *
 */
public class HorlogeDeBerlin {

	private String tableauMinutes[] = { "minute1", "minute2", "minute3", "minute4" };
	private String tableau5Minutes[] = { "5min", "10min", "15MIN", "20min", "25min", "30MIN", "35min", "40min", "45MIN", "50min", "55min" };
	private String tableauHeures[] = { "heure1", "heure2", "heure3", "heure4" };
	private String tableau5Heures[] = { "5heures", "10heures", "15heures", "20heures" };

	private LocalDateTime date = LocalDateTime.now();
	private int minutesModulo5 = date.getMinute()%5;
	private int minutesDivisePar5 = date.getMinute()/5;
	private int heuresModulo5 = date.getHour()%5;
	private int heuresDivisePar5 = date.getHour()/5;
	private int secondes = date.getSecond();
	
	public HorlogeDeBerlin() {
	}

	public void afficherMinutes() {
		System.out.println();
		for (int i = 0; i < minutesDivisePar5; i++) {
			System.out.print("[" + tableau5Minutes[i] + "]");
		}
		System.out.println();
		for (int j = 0; j < minutesModulo5; j++) {
			System.out.print("[" + tableauMinutes[j] + "]");
		}
		System.out.println();
	}

	public void afficherHeures() {
		System.out.println();
		for (int i = 0; i < heuresDivisePar5; i++) {
			System.out.print("[" + tableau5Heures[i] + "]");
		}
		System.out.println();
		for (int j = 0; j < heuresModulo5; j++) {
			System.out.print("[" + tableauHeures[j] + "]");
		}
		System.out.println();
	}

	public void afficherSecondes() {
		String string = secondes % 2 == 0 ? "on" : "off";
		System.out.println("secondes : " + string);
	}

	public static void main(String[] args) {
		HorlogeDeBerlin horloge = new HorlogeDeBerlin();
		LocalDateTime date = LocalDateTime.now();
		System.out.println("Heure testée  ::  "+date.getHour() + ":" + date.getMinute() + ":" + date.getSecond());
		System.out.println();
		horloge.afficherSecondes();
		horloge.afficherHeures();
		horloge.afficherMinutes();

	}

}
