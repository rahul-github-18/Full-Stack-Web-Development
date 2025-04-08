dfs 


#include <stdio.h>
#include <stdlib.h>

#define MAX 7

int graph[MAX][MAX] = {0};
char nodes[MAX] = {'A', 'B', 'C', 'D', 'E', 'F', 'G'};

int visited[MAX];
int path[MAX];
int found = 0;

int getIndex(char ch) {
    for (int i = 0; i < MAX; i++) {
        if (nodes[i] == ch)
            return i;
    }
    return -1;
}

void dfs(int current, int dest, int depth) {
    visited[current] = 1;
    path[depth] = current;

    if (current == dest) {
        found = 1;
        printf("DFS path from %c to %c: ", nodes[path[0]], nodes[depth]);
        for (int i = 0; i <= depth; i++) {
            printf("%c ", nodes[path[i]]);
        }
        printf("\n");
        return;
    }

    for (int i = 0; i < MAX; i++) {
        if (graph[current][i] && !visited[i]) {
            dfs(i, dest, depth + 1);
            if (found) return;
        }
    }

    visited[current] = 0;
}

int main() {
    graph[getIndex('A')][getIndex('B')] = 1;
    graph[getIndex('A')][getIndex('D')] = 1;
    graph[getIndex('B')][getIndex('C')] = 1;
    graph[getIndex('B')][getIndex('E')] = 1;
    graph[getIndex('C')][getIndex('D')] = 1;
    graph[getIndex('C')][getIndex('F')] = 1;
    graph[getIndex('D')][getIndex('A')] = 1;
    graph[getIndex('E')][getIndex('F')] = 1;
    graph[getIndex('E')][getIndex('G')] = 1;
    graph[getIndex('F')][getIndex('G')] = 1;
    graph[getIndex('G')][getIndex('E')] = 1;

    for (int i = 0; i < MAX; i++) visited[i] = 0;

    int src = getIndex('G');
    int dest = getIndex('D');

    dfs(src, dest, 0);

    if (!found) {
        printf("No path found from %c to %c\n", nodes[src], nodes[dest]);
    }

    return 0;
}





bfs


#include <stdio.h>
#include <stdlib.h>

#define MAX 7

int graph[MAX][MAX] = {0};
char nodes[MAX] = {'A', 'B', 'C', 'D', 'E', 'F', 'G'};

int visited[MAX];
int parent[MAX];

int getIndex(char ch) {
    for (int i = 0; i < MAX; i++) {
        if (nodes[i] == ch)
            return i;
    }
    return -1;
}

int queue[MAX];
int front = -1, rear = -1;

void enqueue(int v) {
    if (rear < MAX - 1)
        queue[++rear] = v;
    if (front == -1)
        front = 0;
}

int dequeue() {
    if (front == -1 || front > rear)
        return -1;
    return queue[front++];
}

int isEmpty() {
    return (front == -1 || front > rear);
}

void bfs(int src, int dest) {
    for (int i = 0; i < MAX; i++) {
        visited[i] = 0;
        parent[i] = -1;
    }

    enqueue(src);
    visited[src] = 1;

    while (!isEmpty()) {
        int current = dequeue();

        if (current == dest) break;

        for (int i = 0; i < MAX; i++) {
            if (graph[current][i] && !visited[i]) {
                visited[i] = 1;
                parent[i] = current;
                enqueue(i);
            }
        }
    }

    if (!visited[dest]) {
        printf("No path found from %c to %c\n", nodes[src], nodes[dest]);
        return;
    }

    int path[MAX], idx = 0;
    for (int v = dest; v != -1; v = parent[v]) {
        path[idx++] = v;
    }

    printf("BFS path from %c to %c: ", nodes[src], nodes[dest]);
    for (int i = idx - 1; i >= 0; i--) {
        printf("%c ", nodes[path[i]]);
    }
    printf("\n");
}

int main() {
    graph[getIndex('A')][getIndex('B')] = 1;
    graph[getIndex('A')][getIndex('D')] = 1;
    graph[getIndex('B')][getIndex('C')] = 1;
    graph[getIndex('B')][getIndex('E')] = 1;
    graph[getIndex('C')][getIndex('D')] = 1;
    graph[getIndex('C')][getIndex('F')] = 1;
    graph[getIndex('D')][getIndex('A')] = 1;
    graph[getIndex('E')][getIndex('F')] = 1;
    graph[getIndex('E')][getIndex('G')] = 1;
    graph[getIndex('F')][getIndex('G')] = 1;
    graph[getIndex('G')][getIndex('E')] = 1;

    int src = getIndex('G');
    int dest = getIndex('D');

    bfs(src, dest);

    return 0;
}
