import argparse
from timeit import default_timer as timer
import cProfile

def fibonacci(n):
    if n <= 0:
        return []
    elif n == 1:
        return [0]
    elif n == 2:
        return [0, 1]

    fib_sequence = [0, 1]
    while len(fib_sequence) < n:
        next_num = fib_sequence[-1] + fib_sequence[-2]
        fib_sequence.append(next_num)

    return fib_sequence

# Create a command-line argument parser
parser = argparse.ArgumentParser(description='Compute Fibonacci sequence of a specified length.')
parser.add_argument('--limit', type=int, default=100, help='Length of the Fibonacci sequence')

# Parse the command-line arguments
args = parser.parse_args()

# Get the limit from the command-line arguments
limit = args.limit

#Start execution timer
start = timer()

# Calculate the Fibonacci sequence
with cProfile.Profile() as Profile:
    result = fibonacci(limit)

#End execution timer
end = timer()

print(f"Computed Fibonacci sequence of length {len(result)}: {result}")
print(end - start)
Profile.print_stats()

