FROM python:3.9-slim

WORKDIR /app

COPY fibonacci.py .

RUN pip install argparse

ENTRYPOINT ["python", "fibonacci.py"]

