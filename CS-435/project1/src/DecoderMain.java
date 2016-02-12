import java.io.ByteArrayInputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.nio.charset.StandardCharsets;

public class DecoderMain{
    public static void main(String[] args) throws FileNotFoundException {
		Decoder decoder=new Decoder(new FileInputStream(args[0]));
		decoder.setDebug(true);
		decoder.writeToFile(true);
		decoder.decode();
    }
}