import java.io.FileInputStream;
import java.io.FileNotFoundException;

public class DecoderMain{
    public static void main(String[] args) {
		boolean debugFlag = false;
		boolean writeToFileFlag = false;
		int argsNum = 0;

		for (String arg : args) {
			if (arg.equals("-d")){
				argsNum++;
				debugFlag = true;
			}
			if (arg.equals("-f")) {
				argsNum++;
				writeToFileFlag = true;
			}
		}

		if (args.length < 1) {
			System.out.println("Usage: DecoderMain [-d][-f] FILE");
			System.out.println("\t-d\tPrint debug output");
			System.out.println("\t-f\tWrites output to file instead of stdout");
			System.exit(1);
		}

		String fileLocation = isWindows()? System.getProperty("user.dir")+ "/" + args[argsNum]: args[argsNum];
		Decoder decoder= null;
		try {
			decoder = new Decoder(new FileInputStream(fileLocation));
		} catch (FileNotFoundException e) {
			System.out.println("Could not find file: "+fileLocation);
			System.exit(1);
		}
		decoder.setDebug(debugFlag);
		decoder.writeToFile(writeToFileFlag);
		decoder.decode();
    }

	public static boolean isWindows() {
		return (System.getProperty("os.name").toLowerCase().contains("win"));
	}

}