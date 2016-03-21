import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

public class TaskExecutor {
    public static void main(String[] args) {
        PrintTask task1 = new PrintTask("task1");
        PrintTask task2 = new PrintTask("task2");
        PrintTask task3 = new PrintTask("task3");

        System.out.println("Stating Executor");

        ExecutorService threadExeecutor = Executors.newCachedThreadPool();

        threadExeecutor.execute(task1);
        threadExeecutor.execute(task2);
        threadExeecutor.execute(task3);

        threadExeecutor.shutdown();

        System.out.println("Tasks started, main ends\n");

    }
}
